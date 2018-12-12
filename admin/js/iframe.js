$(document).ready(function(){

//var iframe=document.getElementById('iframe');
//var doc=iframe.contentDocument;
//doc.body.contentEditable=true;
//doc.body.contentEditable=true;
//var iframe=window.document.getElementById('iframe').innerHTML;
  //  var document=iframe.contentWindow.document;
  function clearSelection()
  {
   if (window.getSelection) {window.getSelection().removeAllRanges();}
   else if (document.selection) {document.selection.empty();}
  }
$('#b').on('click',function(){
    document.execCommand("bold",false,null);
    document.getElementById('iframe').focus();
    //clearSelection();
 
    //document.execCommand('bold');
});


$('#i').on('click',function(){
    document.execCommand("italic",false,null);
    document.getElementById('iframe').focus();
    //clearSelection();
});


$('#u').on('click',function(){
    document.execCommand("underline",false,null);
    document.getElementById('iframe').focus();
    //clearSelection();

});


$('#size').on('click',function(){
    var size=window.prompt("Enter font size (1-6)","1");
    document.execCommand("fontSize",false,size);
});
// $('#submit').on('click',function(e){
//     e.preventDefault();
//     //var value=document.getElementById('iframe').contentWindow.document.body.innerHTML;
    
//     $('#odetail').text(value);
//     $.ajax({

//         method:'post',
//         datatype:'text',
//         url:'includes/newvendor.inc.php',
//         data:$('#form').not('#iframe').serialize(),
//         success:function(data){
//             $('#msg').html(data);
//         }


//     });
//     //alert($('#iframe').contentWindow.document.body.innerHTML);
//    // alert(value);
    
// });
});




