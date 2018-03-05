
//jquery code
$(document).ready(function() {
  $("#forms").submit(function() {
   var search = $("#books").val();
    if( search == '') {
     alert("Please type something in the search box");
     }
    else {
     var url = '';
     var img = '';
     var title = '';
     var author = '';
     

     
     $.get("https://www.googleapis.com/books/v1/volumes?q=" + search , function(response){
      //console.log(response);
      // putting a for loop to process the array from the console
        for (j=0;j<response.items.length;j++) {
         // get title of the book
         title = $('<h5 class="center-align ">' + response.items[j].volumeInfo.title + '</h5>');
        
         author = $('<h5 class="center-align "> By:' + response.items[j].volumeInfo.authors + '</h5>');
         
         
         img = $('<img class="aligning card z-depth-5" id="dynamic"<br><br><a href=' + response.items[j].volumeInfo.infoLink + '><button id="imagebutton" class="btn btn-danger">Read More</button></a>' );
         
          
          
          
          
          url = response.items[j].volumeInfo.imageLinks.thumbnail;
          
          img.attr('src', url); // attach the image url
          
          title.appendTo("#result");
          
          author.appendTo("#result");
          
          img.appendTo("#result");
          
         
          
         
          
          }
     });
     }
   return false;
   });
   
});
