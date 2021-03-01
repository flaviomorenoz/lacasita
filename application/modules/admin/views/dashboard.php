
<div id="page-wrapper" class="bg-silver" >

            <div>

               <div class="row">
			   
			   <?php echo $this->session->flashdata('message');?>
			   
					<div class="col-md-4 col-lg-3">
					<a href="<?php echo URL_MENU_INDEX;?>" title="<?php echo get_languageword('menu');?>">
                        <div class="media stats-media-white bg-white">
                            <div class="media-left">
                                <img src="<?php echo FRONT_IMAGES;?>restaurant.svg" width="50" height="50" alt="Menu">
                            </div>
                            <div class="media-body text-right">
                                <p><?php echo get_languageword('menu');?></p>
                                <h4><?php if(isset($modules_count->menu_count)) echo $modules_count->menu_count;?></h4>
								
                            </div>
							
							
                        </div>
					</a>	
                    </div>
					
					
                    <div class="col-md-4 col-lg-3">
					<a href="<?php echo URL_ITEMS_INDEX;?>" title="<?php echo get_languageword('items');?>">
                        <div class="media stats-media-white bg-white">
                            <div class="media-left">
                                <img src="<?php echo FRONT_IMAGES;?>dashboard-fast-food.svg" width="50" height="50" alt="Items">
                            </div>
                            <div class="media-body text-right">
                                <p> <?php echo get_languageword('items');?></p>
                                <h4><?php if(isset($modules_count->items_count)) echo $modules_count->items_count;?></h4>
                            </div>
                        </div>
					</a>	
                    </div>
					
					
                    <div class="col-md-4 col-lg-3">
					<a href="<?php echo URL_ADDONS_INDEX;?>" title="<?php echo get_languageword('addons');?>">
                        <div class="media stats-media-white bg-white">
                            <div class="media-left">
                                <img src="<?php echo FRONT_IMAGES;?>dashboard-condiment.svg" width="40" height="40" alt="Addons">
                            </div>
                            <div class="media-body text-right">
                                <p><?php echo get_languageword('addons');?></p>
                                <h4><?php if(isset($modules_count->addons_count)) echo $modules_count->addons_count;?> </h4>
                            </div>
                        </div>
					</a>	
                    </div>
					
					
					
                    <div class="col-md-4 col-lg-3">
					<a href="<?php echo URL_OPTIONS_INDEX;?>" title="<?php echo get_languageword('options');?>">
                        <div class="media stats-media-white bg-white">
                            <div class="media-left">
                                <img src="<?php echo FRONT_IMAGES;?>dashboard-pizza.svg" width="50" height="50" alt="Options">
                            </div>
                            <div class="media-body text-right">
                                <p><?php echo get_languageword('options');?></p>
                                <h4><?php if(isset($modules_count->options_count)) echo $modules_count->options_count;?></h4>
                            </div>
                        </div>
					</a>	
                    </div>
					
					
                
					<div class="col-md-4 col-lg-3">
					<a href="<?php echo URL_OFFERS_INDEX;?>" title="<?php echo get_languageword('offers');?>">
                        <div class="media stats-media-white bg-white">
                            <div class="media-left">
                                <img src="<?php echo FRONT_IMAGES;?>dashbaoard-voucher.svg" width="50" height="50" alt="Offers">
                            </div>
                            <div class="media-body text-right">
                                <p><?php echo get_languageword('offers');?></p>
                                <h4><?php if(isset($modules_count->offers_count)) echo $modules_count->offers_count;?></h4>
                            </div>
                        </div>
					</a>	
                    </div>
					
					
                
				
                <div class="col-md-4 col-lg-3">
				 <a href="<?php echo URL_CUSTOMERS_INDEX;?>" title="<?php echo get_languageword('customers');?>">
					<div class="media stats-media-white bg-white">
						<div class="media-left">
							<img src="<?php echo FRONT_IMAGES;?>dashboard-network.svg" width="50" height="50" alt="Customers">
						</div>
						<div class="media-body text-right">
							<p><?php echo get_languageword('customers');?></p>
							<h4><?php if(isset($modules_count->users_count)) echo $modules_count->users_count;?></h4>
						</div>
					</div>
				  </a>		
                 </div>
					
					
                
                <div class="col-md-4 col-lg-3">
				 <a href="<?php echo URL_ORDERS_INDEX;?>" title="<?php echo get_languageword('new_orders');?>">
					<div class="media stats-media-white bg-white">
						<div class="media-left">
							<img src="<?php echo FRONT_IMAGES;?>dashboard-list.svg" width="50" height="50" alt="Orders">
						</div>
						<div class="media-body text-right">
							<p><?php echo get_languageword('new_orders');?></p>
							<h4><?php if(isset($modules_count->orders_count)) echo $modules_count->orders_count;?></h4>
						</div>
					</div>
					</a>		
                   </div>
					
					
                
                
					
					
					
                </div>
				
				
          
			<div class="clearfix"></div>   
            <div class="row">	



            	<div class="col-md-6">
					<div class="panel panel-default">
                        <div class="panel-heading">Cliente con mayor monto de pedido</div>
                        <div class="panel-body">
                 			<div id="bar_chart2"></div>
                 		</div>
             		</div>				 
				</div>

				<div class="col-md-6">
					<div class="panel panel-default">
                        <div class="panel-heading">Producto con mayor demanda</div>
                        <div class="panel-body">
                 			<div id="bar_chart1"></div>
                 		</div>
             		</div>				 
				</div>
	
				<div class="col-md-12">
					<div class="panel panel-default">
                        <div class="panel-heading"> <?php echo get_languageword('orders');?> </div>
                        <div class="panel-body">
                 			<div id="bar_chart"></div>
                 		</div>
             		</div>				 
				</div>

			</div>

        </div>   
    </div>
</div>
		 

<script type = "text/javascript" src ="https://www.gstatic.com/charts/loader.js"></script>
<!-- <script type="text/javascript" src="<?php //echo //base_url();?>assets/admin/js/loader.js"></script> -->
<script type="text/javascript">
	google.charts.load('current', {packages: ['corechart', 'bar']});
	google.charts.setOnLoadCallback(drawChart2);

	drawChart2();
	function drawChart2(){
		$.ajax({
			type: 'POST',
			url: '<?php echo base_url();?>admin/cliente_mayor_demanda',
			success: function(dataxs){
				var data2 = $.parseJSON(dataxs);

				var grafico2 = new google.visualization.DataTable();
				grafico2.addColumn('string', 'Producto');
		  		grafico2.addColumn('number', 'Monto');
		  		grafico2.addColumn({type: 'string', role: 'style' });
		  		grafico2.addColumn( {type: 'string', role: 'annotation'});

		  		for (var j = 0; j < data2.length ; j++) {
		  			grafico2.addRow([ 
		  				data2[j].Cliente, 
		  				parseFloat( data2[j].Pedido),
		  				'#00BC7E',
		  				'S/.'+data2[j].Pedido
		  			]);
		  		}

				var options2 = {
					title: 'Popularidad',
					chartArea: {width: '50%'},
					legend: {position: 'top'},
					colors: ['#00BC7E'],
					annotations: {
			          alwaysOutside: true,
			          textStyle: {
			            // fontSize: 12,
			            auraColor: 'none',
			            color: '#555'
			          },
			          boxStyle: {
			            stroke: '#ccc',
			            strokeWidth: 1,
			            gradient: {
			              color1: '#f3e5f5',
			              color2: '#f3e5f5',
			              x1: '0%', y1: '0%',
			              x2: '100%', y2: '100%'
			            }
			          }
			        }, 
					width: 780,
		        	height: 600,
		        	hAxis: {format: 'decimal'},
		        }; 

	            // Instantiate and draw the chart.
	            var chart2 = new google.visualization.BarChart(document.getElementById('bar_chart2'));
	            chart2.draw(grafico2, google.charts.Bar.convertOptions(options2));
			}	
		})
	}
</script>
<script type="text/javascript">
	google.charts.load('current', {packages: ['corechart']}); 
	google.charts.setOnLoadCallback(drawChart1);

	function drawChart1(){
		$.ajax({
			type: 'POST',
			url: '<?php echo base_url();?>admin/producto_mayor_demanda',
			success: function(datax){
				var data1 = $.parseJSON(datax);

				var grafico1 = new google.visualization.DataTable();
				grafico1.addColumn('string', 'Producto');
		  		grafico1.addColumn('number', 'Monto');
		  		grafico1.addColumn({type: 'string', role: 'style' });
		  		grafico1.addColumn( {type: 'string', role: 'annotation'});

		  		for (var j = 0; j < data1.length ; j++) {
		  			grafico1.addRow([ 
		  				data1[j].Producto, 
		  				parseFloat( data1[j].Precio),
		  				'#00BC7E',
		  				'S/.'+data1[j].Precio
		  			]);
		  		}

				var options1 = {
					title: 'Popularidad',
					chartArea: {width: '50%'},
					legend: {position: 'top'},
					colors: ['#00BC7E'],
					annotations: {
			          alwaysOutside: true,
			          textStyle: {
			            // fontSize: 12,
			            auraColor: 'none',
			            color: '#555'
			          },
			          boxStyle: {
			            stroke: '#ccc',
			            strokeWidth: 1,
			            gradient: {
			              color1: '#f3e5f5',
			              color2: '#f3e5f5',
			              x1: '0%', y1: '0%',
			              x2: '100%', y2: '100%'
			            }
			          }
			        }, 
					width: 780,
		        	height: 600,
		        	hAxis: {format: 'decimal'},
		        }; 

	            // Instantiate and draw the chart.
	            var chart1 = new google.visualization.BarChart(document.getElementById('bar_chart1'));
	            chart1.draw(grafico1, google.charts.Bar.convertOptions(options1));
			}	
		})
	}

</script>
<!-- RESUMEN DE PEDIDO AL MES -->
<script type="text/javascript">
	// Load the Visualization API and the line package.
	google.charts.load('current', {'packages':['bar']});
	// Set a callback to run when the Google Visualization API is loaded.
	google.charts.setOnLoadCallback(drawChart);
	 
	function drawChart() {
	  	$.ajax({
			type: 'POST',
			url: '<?php echo base_url();?>admin/orders_summary',
			success: function (data1) {
		  		var data = new google.visualization.DataTable();
		  		//Parse data into Json
		   		var jsonData = $.parseJSON(data1);
		   		var curnt_year = jsonData[12];
		   
		  		// Add legends with data type
		  		data.addColumn('string', 'Año'+' '+curnt_year);
		  		data.addColumn('number', 'Monto');
		  		// data.addColumn('number', 'Expense');
		  
		  		if (jsonData.length>0) {
					for (var i = 0; i < 12; i++) {
						data.addRow([jsonData[i].month, parseInt(jsonData[i].amount)]);
					}
				}			 
			 	var options = {
        			chart: {
          			title: 'Resumen de pedidos'
          			//subtitle: 'Show Sales and Expense of Company'
        		},
		        width: 900,
		        height: 600,
		        axes: {
		          x: {
		            0: {side: 'bottom'}
		          }
				  
		        }
		
		
      		};
      		var chart = new google.charts.Bar(document.getElementById('bar_chart'));
      		chart.draw(data, options);
		}
	  });
	}
</script>		  