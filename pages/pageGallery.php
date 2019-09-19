
   <?php 
$title = "Галерея РИТМА"; 
$description = "Наша галерея";

    
    include ("../includes/head.php");
    
  
       
       include ("../includes/header_otherPages.php");?>
       
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="../js/mob_menu.js"></script>
        <script src="../js/active_link.js"></script>
        <script>
            function ready() {
            $("body").toggleClass("ScrollMenuNone");}
          
            document.addEventListener("DOMContentLoaded", ready);
        </script>




        <section class="gallery">
           

           <iframe class="galleryRitm" src="../Gallery/index.php" title="Галерея РИТМА" ></iframe>
        

        
    </section>

   </main>
       
       <? /*include ("../includes/footer.php")*/;?>
         