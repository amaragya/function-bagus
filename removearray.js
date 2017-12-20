
									if (!Array.prototype.remove) {
										Array.prototype.remove = function(vals, all) {
											var i, removedItems = [];
											if (!Array.isArray(vals)) vals = [vals];
											for (var j=0;j<vals.length; j++) {
												if (all) {
													for(i = this.length; i--;){
														if (this[i] === vals[j]) removedItems.push(this.splice(i, 1));
													}
												}
												else {
													i = this.indexOf(vals[j]);
													if(i>-1) removedItems.push(this.splice(i, 1));
												}
											}
											return removedItems;
										};
									}
//var data = ["car","bike"];
//data.remove("bike");
//data will return car
