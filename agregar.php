<! DOCTYPE html>
< Html >
< Cabeza >
   < Meta  charset = " UTF-8 " >
   < Meta  http-equiv = " X-UA-Compatible "  contenido = " IE = orilla " >
   < Título > Ejercicio </ titulo >
   < Enlace  rel = " estilo "  href = " " >
</ Cabeza >
< Cuerpo >
    <? Php 
  
            session_start ();
 +
                      / *
                      session_destroy ();
                      die ( "jajajaj");
 @@ -17,37 +18,37 @@
  
              $ _id  =  $ _GET [ ' ID ' ];
  
 - Si ( isset ( $ _EMAMEN [ ' carrito ' ]))            
 + Si ( isset ( $ _SESSION [ ' carrito ' ]))            
              {
 - Si ( isset ( $ _EMAMEN [ ' carrito ' ] [ md5 ( $ _id )])) {                
 + Si ( isset ( $ _SESSION [ ' carrito ' ] [ md5 ( $ _id )])) {                
                      
 - $ _EMAMEN [ ' Carrito ' ] [ md5 ( $ _id )] [ ' archivo ' ] + = 1 ;                      
 + $ _SESSION [ ' Carrito ' ] [ md5 ( $ _id )] [ ' archivo ' ] + = 1 ;                    
                  } Demás {
 - $ _EMAMEN [ ' Carrito ' ] [ md5 ( $ _id )] = getProductos ( $ _id );                   
 + $ _SESSION [ ' Carrito ' ] [ md5 ( $ _id )] = getProductos ( $ _id );                   
                  }
                  
                 
              } Demás {
 - $ _EMAMEN [ ' Carrito ' ] [ md5 ( $ _id )] = getProductos ( $ _id );                
 + $ _SESSION [ ' Carrito ' ] [ md5 ( $ _id )] = getProductos ( $ _id );                
              }
  
 - Echo " <pre> " ;               
 + Echo " <pre> " ;             
  
 - Print_r ( $ _EMAMEN );              
 + Print_r ( $ _SESSION );            
  
 - // Print_r (getProductos ($ _ id));              
 + // Print_r (getProductos ($ _ id));            
  
                función  getProductos ( $ id )
                {
                    si ( $ id  ==  1 )
                    {
                        volver [
 - ' Identificación ' => 1 ,                                    
 - ' Nombre ' => ' polo ' ,                                
 - ' Imágenes ' => ' ropa_abercrombie_fitch.jpg ' ,                                  
 + ' ID ' => 1 ,                                         
 + ' Nombre ' => ' polo ' ,                                     
 + ' Imágenes ' => ' ropa_abercrombie_fitch.jpg ' ,                                       
                                ' Descripcion '  =>  ' ropa ' ,
 - ' Social ' => 25 ,                                 
 - ' Precio ' => 80.00                                
 + ' Stock ' => 25 ,                                      
 + ' Precio ' => 80.00                                     
                              ];
                    }
                    
 @@ -84,3 +85,7 @@ GetProductos de función ($ id)
   < H1 > < un  href = " index.php " > Regresar </ a > </ h1 >
 </ Cuerpo >
 </ Html >