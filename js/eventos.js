$(document).ready( function(){
        
        // FUNCIONES DE OCULTAR Y MOSTRAR
        $("div.contenido").hide();
        $("div#resultado").hide();
        
        $("div#menu a").click( function(){
            // ID DEL ENLACE
            var $id = $( this ).attr("id");

                $("div.contenido").hide();
                $("div#resultado").hide();
                $("div.contenido")
                    .eq($id)
                    .show();
                $("div#resultado").show();


        } );


        $(document).ajaxStart( function(){
                    
                    $("div#resultado").html("<img src='cargando.gif' width='100px'>"); 
               }
            );
        
        // CONSULTA
        $("button#consulta").click( function(){ 
        	var $a = $("input#codigo_ver").val();

        	if( $a.length > 0){

        		$.get( "precio.php" , {codigo_ver: $a} , function(datos){
        		
	        		if(datos != -1){
	        			$("div#resultado").html("<h2>El precio es: "+datos+" €</h2>");
	        		}else{
	        			$("div#resultado").html("<h2>El producto no existe</h2>");
	        		}

	        		} );	
        	}else{
        		$("div#resultado").html("<h2>Indica el codigo del producto</h2>");
        	}
        	

        } );

        // COMPRA
        $("button#comprar").click( function(){
        	var $b_cod = $("input#codigo_comprar").val();
        	var $b_uni = $("input#unidades").val();

        		if ( $b_cod.length > 0 && $b_uni.length > 0 ){

        			$.get( "comprar.php" , {codigo_comprar: $b_cod , unidades: $b_uni} , function(datos){
        					
        					if( datos == 0 ){
        						$("div#resultado").html("<h2>Compra realizada.</h2>");
        					}else{
        						$("div#resultado").html("<h2>Fallo en la compra.</h2>");
        					}

        				} );

        		}else if( $b_cod == 0 || $b_uni == 0 ){
        			$("div#resultado").html("<h2>Hay campos vacios</h2>");
        		}
        } );

        // ACTIVAR BOTON CREAR
        $("input#codigo").blur( function(){
        	var $c = $("input#codigo").val();

        		if( $c.length > 0 ){

        			$.get( "comprobar_producto.php" , {codigo: $c} , function(datos){
        				if( datos == 0 ){
        					$("div#resultado").html("<h2>El codigo esta libre</h2>");        
                            $("button#crear").removeAttr("disabled");
                       }else{
                            $("div#resultado").html("<h2>El codigo esta ocupado</h2>");
                            $("button#crear").attr("disabled" , "disabled");
                       }
        			} );       			

        		}else{

        			$("div#resultado").html("<h2>Indica un codigo para el producto.</h2>");
        			  $("button#crear").attr("disabled" , "disabled");

        		}
        } );

        // CREAR PRODUCTO
        $("button#crear").click( function(){
        	var $d_cod = $("input#codigo").val();
        	var $d_nom = $("input#nombre").val();
        	var $d_pre = $("input#precio").val();
        	var $d_stock = $("input#stock").val();

        	if( $d_nom.length > 0 || $d_pre.length > 0 || $d_stock.length > 0 ){

                $.get( "crear_producto.php" , {codigo: $d_cod , nombre: $d_nom , precio: $d_pre , stock: $d_stock} , 
                    function( datos ){
                        if( datos == 0 ){
                            $("div#resultado").html("<h2>El producto se ha creado correctamente.</h2>"); 
                        }else{
                            $("div#resultado").html("<h2>El producto no se ha creado.</h2>"); 
                        }
                    } );

        	}else{
                $("div#resultado").html("<h2>Hay campos vacios</h2>");
            }

        } );

        // MOSTRAR TODOS LOS DATOS
        $("a#3").click( function(){            
            $.get( "ver.php" , function(datos){

                var $datos = JSON.parse( datos );

                $resultado = "<table width='300px' align='center' border='1'>";
                $resultado += "<tr><td>Codigo</td><td>Nombre</td><td>Precio</td><td>Unidades</td></tr>"

                    if( datos.length > 0 ){
                        for ($i in $datos){
                               $resultado+="<tr>";   
                               $resultado+="<td>"+$datos[$i].codigo +"</td><td>"+$datos[$i].nombre +"</td><td>"+ $datos[$i].precio+"</td><td>"+$datos[$i].unidades +"</td>";
                               $resultado+="</tr>";
                           }
                        $resultado+="</table>";
                           $("div#ver").html($resultado);  
                           $("div#resultado").html("<h2>Datos mostrados con exito</h2>");
                    }else{
                        $("div#resultado").html("<h2>No existen datos de cuentas</h2>"); 
                    }

            } ); 
        } );

    });

