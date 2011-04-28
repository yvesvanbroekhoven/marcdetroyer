/*
 * Ajax form
 */

(function($){
  
  var ctx
  ;
  
  var _submit
  ,   _handleResponse
  ,   _handleError
  ;
  
  _submit = function(event){
    event.preventDefault();
    $.ajax({
      type:     'POST',
      url:      ctx.attr('action'),
      data:     $(this).serialize(),
      success:  _handleResponse,
      error:    _handleError
    });
  };
  
  _handleResponse = function(data){
    var form = $("#contact form", data);
    
    ctx.replaceWith(form);
    ctx = form;
    
  };
  
  _handleError = function(){
    console.log("something went wrong baby");
  };
  
  $.fn.informer = function(){
    $(this).each(function(){
      ctx = $(this);
      $("#contact form").live("submit", _submit);
    });
  };
  
}(jQuery));

$(function(){
  $("#contact form").informer();
})

