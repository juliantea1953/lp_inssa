<script type="text/javascript">

	<?php

require_once('index.php');

?>



campaign = "hospitalario";

console.log("asdadasdasd");
    

const prod = [
    {
        "id":0,
        "linea":"HORECA",
        "producto":[
            {"productos":"Dispensadoras de café"},
        	{"productos":"Dispensadoras de bebidas"},
			{"productos":"Exprimidoras de naranjas"},
        	{"productos":"Granizadoras"},
			{"productos":"Máquinas de helado"},
        	{"productos":"Máquinas de hielo"}
        ]
    },

	{
        "id":1,
        "linea":"VENDING",
        "producto":[
            {"productos":"Dispensadoras Genesis"},
        	{"productos":"Dispensadoras IKA"},
			{"productos":"Dispensadoras de bebidas"}
        	
        ]
    },

	{
        "id":2,
        "linea":"EAS",
        "producto":[
            {"productos":"EAS"}       	
        ]
    },

	{
        "id":3,
        "linea":"TECNOLOGÍA",
        "producto":[
            {
				"id":0,
				"Vending":[
					{"productos":"Telemetria"},
					{"productos":"Biometria"},
					{"productos":"Autogestión"}

			]
		},

		{
				"id":1,
				"eas":[
					{"productos":"Store"},
					{"productos":"MD"},
					{"productos":"Gabinete inteligente"}

			]
		},
	]	
        
    },
	

];





    $(document).ready(function() {

	

		var $selectp = $('#producto');

	
	console.log(prod);
	console.log(campaign);

	switch (campaign) {
    case 'hospitalario':
        var lineaP = "TECNOLOGÍA";
		var produId = 1;
		var produuu = "eas";
        break;
	};

	console.log(lineaP);

	var rest = prod.find(element => element.linea == lineaP);

	var re = rest.producto;

 	var ee = re.find(element => element.id == produId );

	 var rr = ee[produuu];

	console.log(re);
	console.log(ee);
	console.log(rr);

	$.each(rr, function( id, productos) {
      $selectp.append('<option value=' + productos.productos + '>' + productos.productos + '</option>');

    });

	



  });

  
	</script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
<!--     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
 -->
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>



    <!-- Template Javascript -->
    <script src="js/main.js"></script>
