var baseurl = $('meta[name=url]').attr('content');
if(document.cookie.indexOf('lggdn=1') != -1) {
  $.get( baseurl+"/menu", function( data ) {
    $(data).insertBefore("#header");
  });
}
