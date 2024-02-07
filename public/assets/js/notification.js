(function(){
	var notif = {
		init:function(){
			setInterval(notif.preAction , 500);
		},

		preAction:function(){
			var _url = $("#urls_get_notif").val();
			var _block = $("#nombre-notif-span");
			var urlsb = $("#urls_base").val();
			var nbr_s = $("#stock_nbr_notif").val();

			notif.getCountNotif( _url , _block, nbr_s, urlsb );
			console.clear();
		},

		getCountNotif:function( _url , _block, nbr_s, urlsb ){

			$.ajax({
		        url: _url,
		        type: 'get',
		        dataType:"json",
		        success: function (data) {
		        	if (nbr_s > 0) {
		        		if (nbr_s < data.nbr) {
		        			$('#player').find("embed").remove("");
							$("#player").append("<embed src='"+urlsb+"/sound/livechat.mp3') }}'' autostart='true' hidden='true'>");
		        		}
		        	}

		     		$("#stock_nbr_notif").val(data.nbr);
		        	_block.html(data.nbr);
		        }
		    });
		}
	}

	notif.init();
})();