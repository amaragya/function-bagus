
          <script type="text/javascript">
            $(document).ready(function(){
              var table = $("table tbody.isikonfirmasibayar");
              var rows = table.find($("tr"));
              var colsLength = $(rows[0]).find($("td.yangdimerge")).length;
              var removeLater = new Array();


              for(var i=0; i<colsLength; i++){
                var startIndex = 0;
                var lastIndex = 0;
                var startText = $($(rows[0]).find("td.yangdimerge")[i]).text();

                for(var j=1; j<rows.length; j++){
                  var cRow =$(rows[j]);
                  var cCol = $(cRow.find("td.yangdimerge")[i]);
                  var currentText = cCol.text();
                  if(currentText==startText){
                    cCol.css("background","gray");
                    removeLater.push(cCol);
                    lastIndex=j;
                  }else{
                    var spanLength = lastIndex-startIndex;
                    if(spanLength>=1){
                      $($(rows[startIndex]).find("td.yangdimerge")[i]).attr("rowspan",spanLength+1);
                    }
                    lastIndex = j;
                    startIndex = j;
                    startText = currentText;
                  }

                }
                var spanLength = lastIndex-startIndex;
                if(spanLength>=1){
                //console.log($($(rows[startIndex]).find("td")[i]))
                $($(rows[startIndex]).find("td.yangdimerge")[i]).attr("rowspan",spanLength+1);
              }
              console.log("---");
            }
            for(var i in removeLater){
              $(removeLater[i]).remove();
            }
          });
        </script>