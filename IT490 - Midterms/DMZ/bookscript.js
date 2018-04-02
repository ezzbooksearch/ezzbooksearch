$(document).ready(function(){

    $("#myform").submit(function(event){
            
        event.preventDefault();
       
      var search = $("#books").val();
      if(search=='')
      {
       alert("Please enter something in the Search box");
  
      }	
      else{
          var url='';
          var img='';
          var title='';
          var author='';
          var publishedDate='';
          var country='';
          var saleability ='';
     
     
          
          console.log("Search for "+search);
          
          $.get("https://www.googleapis.com/books/v1/volumes?q="+search,function(response){
              
  
              var table = $('<table>');
                  table.attr('border','1');
                  var tr = $('<tr>');
                  var td = $('<td>');
                  td.html('Preview');
                  tr.append(td);
                  td = $('<td>');
                  td.html("Title");
                  tr.append(td);
                  td = $('<td>');
                  td.html('Authors');
                  tr.append(td);
          
          td = $('<td>');
                  td.html('publishedDate');
                  tr.append(td);
          
          td = $('<td>');
                  td.html('country');
                  tr.append(td);
          
          td = $('<td>');
                  td.html('saleability');
                  tr.append(td);
          
         
                  
                  table.append(tr);
              
          
                for(i=0;i<response.items.length;i++){
            
            saleability=$('<h5>'+response.items[i].saleInfo.saleability + '</h5>');
                    country=$('<h5>'+response.items[i].saleInfo.country + '</h5>');
                    title=$('<h5>'+response.items[i].volumeInfo.title + '</h5>');
                    author=$('<h5>'+response.items[i].volumeInfo.authors + '</h5>');
            subtitle=$('<h5>'+response.items[i].volumeInfo.publishedDate + '</h5>');
            img = $("<img><a href=" + response.items[i].volumeInfo.infoLink + "><button id='imagebutton' class='btn btn-danger'>Read More</button></a>");
                    //img=$('<img><a href=' + response.items[i].volumeInfo.infoLink + '><button id='imagebutton' class='btn btn-danger'>Read More</button></a>');
                    
                       response.items[i].volumeInfo.imageLink.thumbnail
  
                  
                  
                      var tr = $('<tr>');
                      var td = $('<td>');
                      td.html(img);
                      tr.append(td);
                      td = $('<td>');
                      
                      td.html(response.items[i].volumeInfo.title);
                      tr.append(td);
                      td = $('<td>');
                      td.html(response.items[i].volumeInfo.authors);
                      tr.append(td);
             
            td = $('<td>');             
            td.html(response.items[i].volumeInfo.publishedDate);
                      tr.append(td);
            
            td = $('<td>');             
            td.html(response.items[i].saleInfo.country);
                      tr.append(td);
            
             td = $('<td>');             
            td.html(response.items[i].saleInfo.saleability);
                      tr.append(td);
            
            
                      
                      
                      
                      url=response.items[i].volumeInfo.imageLinks.smallThumbnail;
                    
                    img.attr('src',url);
                    table.append(tr);
                  
                  $('body').append(form);
          
                    
                    
                    
                }
          
          });	
          
      }
  
                    
    });
    
    
  
    return false;
  });
