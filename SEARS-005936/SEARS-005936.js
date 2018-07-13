(function(){

  // abort if we don't have querySelectorAll (IE < 8)
  if ( typeof document.querySelectorAll !== 'function' ) {
    return;
  }

  var slug = 'SEARS-005936',
    rows = document.querySelectorAll( '#' + slug + ' .row' );

  rows.forEach( function( row, i ){
    row.addEventListener( 'click', rowClickHandler );
    row.addEventListener( 'tap', rowClickHandler );
  });

  function rowClickHandler() {
    var url = this.getAttribute( 'data-href' );
    // if no or empty data-href
    if ( !url ) {
      // look for a link inside this element
      var link = this.querySelector( 'a' );
      // if no link, abort
      if ( !link ) {
        return false;
      }
      // if link, snag the URL
      url = link.getAttribute( 'href' );
    }
    // check again that we have URL before navigating
    if ( url ) {
      window.location.href = url;
    }
    return false;
  }

})();
