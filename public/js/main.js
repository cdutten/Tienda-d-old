/* ==========================================================================
   Cdutten custom Javascript
   ========================================================================== */
$('#img')
	//Start Zoom
	.on('mouseover', function(){
      $(this).css({'transform': 'scale('+ $(this).attr('data-scale') +')'
                   'position' : 'absolute'
                  });
    })
	//Finish zoom.
	.on('mouseout', function(){
     $(this).css({'transform': 'scale(1)'});
	})
	//Follow movement.
	.on('mousemove', function(e){
      $(this).css({'transform-origin': ((e.pageX - $(this).offset().left) / $(this).width()) * 100 + '% ' + ((e.pageY - $(this).offset().top) / $(this).height()) * 100 +'%'
    });
    })

  



  //  background-repeat: no-repeat;
  //  background-position: center;
  //  background-size: cover;
  //  transition: transform .5s ease-out;