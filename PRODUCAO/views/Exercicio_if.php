<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/exercicioIf.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
    <title>Aprendendo com escolhas</title>
</head>
<body>
    <div  class="img">
        <div class="container">
            <div class="acao" style="background-image: url('../img/Nsei.png'); background-repeat: no-repeat; background-size: 100%;
            background-color: #0b34b7;;">
                <div class="dropzone" >
                    <p id="yy" value= "2"></p>
                    <!--<button onclick="abreVideo()" class="w3-button w3-black">A</button>-->
                </div>
            </div>
        <!-- VIDEO -->
            

            <div id="id01" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                  
                  <div class="close" onclick="fecharVideo()" >&times; Refazer</div>
                  <br>
                  <br>
                  <div>
                     <video id="video" width="900" height="800" controls="controls">
                     <source src="../img/Gatinho.mp4" type="video/mp4">
                   </div>
                </div>
              
            </div>

            
            <div class="escolhas">
                <div class="dropzone2" style="width: 80%; justify-content: inline;">
                
                    <img src="../img/21ab706902567bd0c10ba01c61d7541e-silhueta-do-icone-da-escada.png"  id="draggable" draggable="true" ondragstart="event.dataTransfer.setData('text/plain',null)" value= "1" style="width: 80px;" alt=" 1">

                    <img src="../img/Camaelastica.png"  id="draggable" draggable="true" ondragstart="event.dataTransfer.setData('text/plain',null)" value= "2" style="width: 80px;" alt=" 1">

                    <img src="../img/corda.png"  id="draggable" draggable="true" ondragstart="event.dataTransfer.setData('text/plain',null)" value= "2" style="width: 80px;" alt=" 1">  
                                        
                
                </div>
            </div>
            
        </div>
    </div>
    <script src="../js/ScriptIF.js" defer></script>


</body>
</html>