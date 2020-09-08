<template>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper  bgcolorba ">
        <!-- Content Header (Page header) -->
        <div class="content-header ">
            <div class="container-fluid">
                <div class="jumbotron shadowjumbo bg-white text-success p-2" >
                    <h1 class="display-4 pt-2 pl-3">Learn At your Pace</h1>
                    <p class="lead pt-1 pl-5 font-italic text-monospace">The small building blocks make the Giant Structures</p>
                 </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <div class="row p-2 ">
            <!-- Main content -->
            <div class="content col-md-8 " >
                <div class="container-fluid">
                    <router-view></router-view>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
        
            <div class="col-md-4 mx-auto m-2" >
             <div class="font-weight-bold pl-2" >More that might interest you..... 
                 <suggestion></suggestion>
                
            </div>
           </div>
        </div>
    <!-- /.content-wrapper -->
    </div>
   
    
    <!-- ./wrapper -->




</template>

<script >
import Suggestion from './layouts/Suggestion';
export default {
    name:"App",
   
   components:{
       Suggestion
   }
  
    
}
</script>
<style scoped>
 .shadowjumbo{
     -webkit-box-shadow:0 0 10px green inset;
     box-shadow:0 0 10px green inset;  
     }
 h1{
          text-shadow:1px 1px 2px black, 0 0 25px green,0 0 5px darkgreen;
          letter-spacing :2px;
     }
    
</style>