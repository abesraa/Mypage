$(document).ready(function () {
    $("#register").jqxButton({ width: '120px', height: '35px', theme: 'shinyblack'});
       

    $("#login").jqxButton({ width: '120px', height: '35px', theme: 'shinyblack'});
       
            
  $("#usremail").jqxInput({placeHolder: "Enter Email", height: 25, width: 250, minLength: 1,theme: 'shinyblack' });        
  $("#usrpass").jqxInput({placeHolder: "Enter password", height: 25, width: 250, minLength: 1,theme: 'shinyblack' });
});


