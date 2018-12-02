var canvas = new fabric.Canvas('c', {width:800,height:400});
fabric.Object.prototype.set({
    snapAngle:10,
    snapThreshold:5,
    centeredRotation:true,
    transparentCorners: false,
    borderColor: '#ff00ff',
    cornerColor: '#ff0000',
    cornerStyle:'circle'
});
$(document).ready(function(){
//var json;
$('#itext').click(function(){
var itext=new fabric.Textbox("Text Here",{
    left:500,
    top:200,
    width:100,
    fontFamily: 'Arial Narrow',
    textAlign:'center',
    fontSize:20
});
canvas.add(itext);

canvas.setActiveObject(itext);
//alert(canvas.getActiveObject().fontFamily);
});
$('#size').click(function(){
    //alert(t);
    try{
    var t=canvas.getActiveObject().type;
    if(t==='textbox'){
        var obj=canvas.getActiveObject(); 
        var size=window.prompt('Enter Fontsize',40);
   
    obj.set({fontSize:size});
    }
    canvas.renderAll();
}catch(err){}

});
$('#stroke').click(function(){
    try{
    var t=canvas.getActiveObject().type;
    
    //alert(t);
    if(t!=='textbox'){
        var obj=canvas.getActiveObject(); 
        var size=window.prompt('Enter StrokeWidth(line thickness)',3);
        var strokeWidth=Number(size);
    
    
        //obj.strokeWidth=size;
        obj.strokeWidth=strokeWidth;
    //    alert(typeof strokeWidth);
    canvas.renderAll();
}
}catch(err){}
    
    

});
$('#b').click(function(){
    //alert(t);
    try{
    var t=canvas.getActiveObject().type;
    if(t==='textbox'){
        var obj=canvas.getActiveObject(); 
      //  var size=window.prompt('Enter Fontsize',40);
   if(obj.fontWeight==='normal')
    obj.set({fontWeight:'bold'});
    else{obj.set({fontWeight:'normal'});}
    }
    canvas.renderAll();
}catch(err){}

});


$('#i').click(function(){
    //alert(t);
    try{
    var t=canvas.getActiveObject().type;
    if(t==='textbox'){
        var obj=canvas.getActiveObject(); 
       // var size=window.prompt('Enter Fontsize',40);
   if(obj.fontStyle==='normal')
    obj.set({fontStyle:'italic'});
    else{obj.set({fontStyle:'normal'});}
    }
    canvas.renderAll();
    
}catch(err){}
});



$('#u').click(function(){
    //alert(t);
    try{
    var t=canvas.getActiveObject().type;
    if(t==='textbox'){
        var obj=canvas.getActiveObject(); 
       // var size=window.prompt('Enter Fontsize',40);
   if(obj.underline===false)
    obj.set({underline:true});
    else{obj.set({underline:false});}
    }
    canvas.renderAll();
}catch(err){}  

});
$('#rect').click(function(){        //create rectangle
            var rect=new fabric.Rect({
                //left:50,
                //top:50,
                fill:'transparent',
                stroke:'#111',
                strokeWidth:2,
                width:120,
                height:120,
                originX: 'left', 
                originY: 'top',
                snapAngle:10,
                snapThreshold:5,
                noScaleCache: true,
                
                centeredRotation: true
            })
            rect.left=400;
            rect.top=50;
            canvas.add(rect);
            var lastObj=canvas.getObjects().length-1;
            //window.alert(lastObj);
            canvas.setActiveObject(canvas.item(lastObj));
        });

        $('#copy').click(function(){
                    // clone what are you copying since you
            // may want copy and paste on different moment.
            // and you do not want the changes happened
            // later to reflect on the copy.
            canvas.getActiveObject().clone(function(cloned) {
                _clipboard = cloned;
            });
        });
       
        $('#paste').click(function(){
            // clone again, so you can do multiple copies.
            _clipboard.clone(function(clonedObj) {
                canvas.discardActiveObject();
                clonedObj.set({
                    left: clonedObj.left + 10,
                    top: clonedObj.top + 10,
                    evented: true,
                });
                if (clonedObj.type === 'activeSelection') {
                    // active selection needs a reference to the canvas.
                    clonedObj.canvas = canvas;
                    clonedObj.forEachObject(function(obj) {
                        canvas.add(obj);
                    });
                    // this should solve the unselectability
                    clonedObj.setCoords();
                } else {
                    canvas.add(clonedObj);
                }
                _clipboard.top += 10;
                _clipboard.left += 10;
                canvas.setActiveObject(clonedObj);
                canvas.requestRenderAll();
            });
});
$('#clear').click(function(){
    canvas.clear();
});
$('#line').click(function(){
    canvas.add(new fabric.Line([600, 60, 600, 200], {
        strokeWidth:2,
        stroke: '#111',
        originX: 'left', 
        originY: 'top',
        centeredRotation: true,
        snapAngle:10,
        noScaleCache: true,
        snapThreshold:5
    }));
    var lastObj=canvas.getObjects().length-1;
    //window.alert(lastObj);
    canvas.setActiveObject(canvas.item(lastObj));
});

$('#dline').click(function(){
    canvas.add(new fabric.Line([650, 50, 650, 200], {
        strokeWidth:2,
        stroke: '#111',
        originX: 'left', 
        originY: 'top',
        centeredRotation: true,
        snapAngle:10,
        noScaleCache: true,
        strokeDashArray: [5, 6],
        snapThreshold:5
    }));
    var lastObj=canvas.getObjects().length-1;
    //window.alert(lastObj);
    canvas.setActiveObject(canvas.item(lastObj));
});
$('#remove').click(function(){
     //canvas.remove(canvas.getActiveObject());
     canvas.getActiveObjects().forEach((obj) => {
        canvas.remove(obj)
      });
      canvas.discardActiveObject().renderAll();
});


$('#submit').on('click',function(e){
    e.preventDefault();
   // var json=canvas.toDatalessJSON();
    var svg=canvas.toSVG();
    //console.log(json);
    //console.log(JSON.stringify(json));
    $.ajax({
        method:'post',
        dataType:'text',
        url:'../pages/includes/doc.ajax.inc.php',
        data:$('#form').serialize()+'&svg='+svg,
        success:function(data){
            
                $('#result').html(data);
                location.reload();
    
        }
    })
});
    });

$('#preview').on('click',function(){
    var docn=document.getElementById('doc').value;
    window.location.href='printDoc.php?docn='+docn;
});
    $('#svg').click(function(){
        console.log(canvas.toSVG());
    });

//createGrid();

// function createGrid(){
// //fabric.Object.prototype.objectCaching = false;
// var grid = 20;

// //create grid

// for (var i = 0; i < (800 / grid); i++) {
//   //canvas.add(new fabric.Line([ i * grid, 0, i * grid, 400], { stroke: '#ccc', selectable: false }));
//   //canvas.add(new fabric.Line([ 0, i * grid, 800, i * grid], { stroke: '#ccc', selectable: false }))
// }


// canvas.on('object:moving', function(options) { 
//   options.target.set({
//     left: Math.round(options.target.left / grid) * grid,
//     top: Math.round(options.target.top / grid) * grid
//   });
// });
// }


function loadValues(table,item){
var id=null;
    $.ajax({
        async:false,
        method:'post',
        dataType:'text',
        url:'../pages/includes/loadValues.inc.php',
        data:{table,item},
        success:function(data){
          id=data;
        }
        
    })
 
    return id;
}
canvas.on('object:scaling', function(){
    var obj = canvas.getActiveObject(),
        width = obj.width,
        height = obj.height,
        scaleX = obj.scaleX,
        scaleY = obj.scaleY;
    
    obj.set({
      width : width * scaleX,
      height : height * scaleY,
      scaleX: 1,
      scaleY: 1
    });
  });
