





	<script type="text/javascript">
		$(function(){
// THIS SCRIPT COPYRIGHT SMART SOLUTION
// Created by M agya amarullah

			var cpr = $("#copyright"); //jenis selector
			var ubahtampilan = function(){
				// $("body").html("oops");		
			}
			if(location.hostname == "NAMA_DOMAIN"){ //mencek apakah selector ada, jika ga ada dia langsung ngubah tampilan
				
				ubahtampilan();
			}
			if(cpr.length == 0){ //mencek apakah selector ada, jika ga ada dia langsung ngubah tampilan
				
				ubahtampilan();
			}else{
				if(cpr.html().indexOf("Smart Solution (PT. Aisy Tekno Indonesia)") != -1){
					//mencek apakah kata Smart Solustion (PT. Aisy Tekno Indonesia) ada, jika ada lanjut filter ke bawah
					if(cpr.parents(":hidden").length == 0){
						//mencek apakah ada yang nyembunyiin div/ kata2 copyright di atas/parentnya selector jika ga ada lanjut filter ke bawah
						if(cpr.find(":hidden").length != 0){
							//mencek apakah ada yang nyembunyiin div/ kata2 copyright di bawah/childnya selector jika ada 
								
							ubahtampilan();	
						}
					}else{
								
						ubahtampilan();
					}
				}else{
						
					ubahtampilan();
				}
			}
		});
	</script>

<!-- SKRIP FOOTERNYA -->
    <div id="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <p>&copy; 2017 <?php echo $r_web['nama_perusahaan']; ?> All copyrights reserved - Designed & Developed by <a rel="nofollow" href="http://smartsolution.co.id">Smart Solution (PT. Aisy Tekno Indonesia)</a></p>
                </div>
            </div>
        </div>
    </div>