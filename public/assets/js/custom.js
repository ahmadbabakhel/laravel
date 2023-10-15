function divergentPalette(target) {
    if (target instanceof am4core.ColorSet) {
      target.list = [
        am4core.color("#024866"),
        am4core.color("#376478"),
        am4core.color("#5d828a"),
        am4core.color("#82a19e"),
        am4core.color("#a9c0b3"),
        am4core.color("#d3dfc9"),
        am4core.color("#ffffe0"),
        am4core.color("#f2d9ab"),
        am4core.color("#e0b581"),
        am4core.color("#cb915c"),
        am4core.color("#9d4b1e"),
        am4core.color("#842700"),
      ];
    }
  }
  
  function sequentialPalette(target) {
    if (target instanceof am4core.ColorSet) {
      target.list = [
        am4core.color("#024866"),
        am4core.color("#23566f"),
        am4core.color("#376478"),
        am4core.color("#4a7381"),
        am4core.color("#5d828a"),
        am4core.color("#6f9194"),
        am4core.color("#82a19e"),
        am4core.color("#95b0a8"),
        am4core.color("#a9c0b3"),
        am4core.color("#bed0be"),
        am4core.color("#d3dfc9"),
        am4core.color("#e8efd4"),
      ];
    }
  }
  
  function categoricalPalette(target) {
    if (target instanceof am4core.ColorSet) {
      target.list = [
        am4core.color("#006893"),
        am4core.color("#00917C"),
        am4core.color("#D77836"),
        am4core.color("#585066"),
        am4core.color("#842700"),
        am4core.color("#6FA04A"),
        am4core.color("#EBC380"),
        am4core.color("#396A63"),
        am4core.color("#012C3D"),
        am4core.color("#D49E3C"),
        am4core.color("#816757"),
        am4core.color("#A3CAD2"),
      ];
    }
  }
  
  // Themes begin
  am4core.useTheme(am4themes_animated);
  //am4core.useTheme(divergentPalette);
  //am4core.useTheme(sequentialPalette);
  am4core.useTheme(categoricalPalette);
  // Themes end
  
  // Create chart instance
  var chart = am4core.create("chartdiv", am4charts.PieChart);
  
  // Add and configure Series
  var pieSeries = chart.series.push(new am4charts.PieSeries());
  pieSeries.dataFields.value = "amount";
  pieSeries.dataFields.category = "payment";
  
  // Let's cut a hole in our Pie chart the size of 30% the radius
  chart.innerRadius = am4core.percent(30);
  
  // Put a thick white border around each Slice
  pieSeries.slices.template.stroke = am4core.color("#fff");
  pieSeries.slices.template.strokeWidth = 2;
  pieSeries.slices.template.strokeOpacity = 1;
  pieSeries.slices.template
    // change the cursor on hover to make it apparent the object can be interacted with
    .cursorOverStyle = [
      {
        "property": "cursor",
        "value": "pointer"
      }
    ];
  
  pieSeries.alignLabels = false;
  pieSeries.labels.template.bent = true;
  pieSeries.labels.template.radius = 3;
  pieSeries.labels.template.padding(0,0,0,0);
  
  pieSeries.ticks.template.disabled = true;
  
  // Create a base filter effect (as if it's not there) for the hover to return to
  var shadow = pieSeries.slices.template.filters.push(new am4core.DropShadowFilter);
  shadow.opacity = 0;
  
  // Create hover state
  var hoverState = pieSeries.slices.template.states.getKey("hover"); // normally we have to create the hover state, in this case it already exists
  
  // Slightly shift the shadow and make it more prominent on hover
  var hoverShadow = hoverState.filters.push(new am4core.DropShadowFilter);
  hoverShadow.opacity = 0.7;
  hoverShadow.blur = 5;
  
  // Add a legend
  chart.legend = new am4charts.Legend();
  
  chart.data = [{
    "payment": "Total Payment",
    "amount": 501.9
  },{
    "payment": "Paid Payment",
    "amount": 165.8
  }, {
    "payment": "Due Payment",
    "amount": 139.9
  }, {
    "payment": "Pending Payment",
    "amount": 128.3
  }];