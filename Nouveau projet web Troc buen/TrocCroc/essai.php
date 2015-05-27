<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" href="css/style.css">
<title>recherche</title>
</head>
<body>
<script>
	var width = 550, height = 550;
	var path = d3.geo.path();
	var projection = d3.geo.conicConformal()
    .center([2.454071, 46.279229])
    .scale(3000)
    .translate([width / 2, height / 2]);
    path.projection(projection);
 
var svg = d3.select('#map').append("svg")
    .attr("id", "svg")
    .attr("width", width)
    .attr("height", height);
 
var deps = svg.append("g");

d3.json('d3js/map-firststep/departments.json', function(req, geojson) {
    deps.selectAll("path")
        .data(geojson.features)
        .enter()
        .append("path")
        .attr("d", path);
});

var div = d3.select("body").append("div")  
    .attr("class", "tooltip")              
    .style("opacity", 0);

    d3.json('d3js/map-firststep/departments.json', function(req, geojson) {
    deps.selectAll("path")
        .data(geojson.features)
        .enter()
        .append("path")
        .attr('class', 'department')
        .attr("d", path)
        .on("mouseover", function(d) {
            div.transition()       
                .duration(200)
                .style("opacity", .9);     
            div.html("Département : " + d.properties.NOM_DEPT + "<br>"
                  +  "Région : " + d.properties.NOM_REGION) 
                .style("left", (d3.event.pageX + 30) + "px")    
                .style("top", (d3.event.pageY - 30) + "px")
        })
        .on("mouseout", function(d) {
            div.transition()
                .duration(500)
                .style("opacity", 0);
            div.html("")
                .style("left", "0px")
                .style("top", "0px");
        });
});
</script>