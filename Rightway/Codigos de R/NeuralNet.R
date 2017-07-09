###
### prepare data
###
library(mlbench)
data(DatosAleatorios)

# inspect the range which is 1-50
summary(DatosAleatorios$Carrera)


##
## model linear regression
##

lm.fit <- lm(Carrera ~ ., data=DatosAleatorios)

lm.predict <- predict(lm.fit)

# mean squared error: 21.89483
mean((lm.predict - DatosAleatorios$Carrera)^2) 

plot(DatosAleatorios$Carrera, lm.predict,
     main="Linear regression predictions vs actual",
     xlab="Actual")


##
## model neural network
##
require(nnet)

# scale inputs: divide by 50 to get 0-1 range
nnet.fit <- nnet(Carrera/50 ~ ., data=DatosAleatorios, size=8) 

# multiply 50 to restore original scale
nnet.predict <- predict(nnet.fit)*50 

# mean squared error: 16.40581
mean((nnet.predict - DatosAleatorios$Carrera)^2) 

plot(DatosAleatorios$Carrera, nnet.predict,
     main="Neural network predictions vs actual",
     xlab="Actual")