$(document).ready(function(){

var iframe=document.getElementById('iframe');
var doc=iframe.contentDocument;
//doc.body.contentEditable=true;
doc.body.contentEditable=true;
    var iframeDoc=iframe.contentWindow.document;

$('#b').on('click',function(){
    iframeDoc.execCommand('bold');
});


$('#i').on('click',function(){
    iframeDoc.execCommand('italic');
});


$('#u').on('click',function(){
    iframeDoc.execCommand('underline');
});


$('#size').on('click',function(){
    var size=window.prompt("Enter font size (1-7)","1");
    iframeDoc.execCommand("fontSize",false,size);
});
$('#submit').on('click',function(e){
    e.preventDefault();
    var value=document.getElementById('iframe').contentWindow.document.body.innerHTML;
    $('#odetail').text(value);
    $.ajax({

        method:'post',
        datatype:'text',
        url:'includes/newvendor.inc.php',
        data:$('#form').not('#iframe').serialize(),
        success:function(data){
            $('#msg').html(data);
        }


    });
    //alert($('#iframe').contentWindow.document.body.innerHTML);
   // alert(value);
    
});
});




