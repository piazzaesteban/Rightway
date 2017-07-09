# Library
if (!require("fmsb")) {
  install.packages("fmsb", repos="http://cran.rstudio.com/") 
  library("fmsb")
}
 
# Datos inventados
data=data.frame(matrix(c(45,0,2,75, 12), nrow=1, ncol=5))

colnames(data) =c("Razonamiento Verbal" , "Razonamiento Matemático" , "Razonamiento Abstracto" , "Velocidad de Percepción", "Ortografía")
 
# To use the fmsb package, I have to add 2 lines to the dataframe: the max and min of each topic to show on the plot!
data=rbind(rep(100,5) , rep(0,5) , data)
 
# The default radar chart proposed by the library:
radarchart(data)
 
png(filename="chart.png")

# Custom the radarChart !
radarchart( data  , axistype=1 , 
 
    #custom polygon
    pcol=rgb(0.39607,0.1098,0.5058,0.9) , pfcol=rgb(0.39607,0.1098,0.5058,0.5) , plwd=4 , 
 
    #custom the grid
    cglcol="grey", cglty=1, axislabcol="grey", caxislabels=seq(0,100,25), cglwd=0.8,
 
    #custom labels
    vlcex=0.8 
    )

dev.off()