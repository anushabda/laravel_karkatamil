<template>
   <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <center><div class="card bg-white" v-if="basic==null">
                   <div class="text-red display-4" >Work in Progress<br>
                      
                       <span class="text-dark " ><i class="fas fa-hard-hat"></i> </span>
                  
                    </div>
                </div>
                </center>
                <div class="card bgcolorba shadow-lg " v-if="basic!=null" >
                    
                <h2 class="textcolorbv font-italic font-weight-bold mx-auto pt-2 " > {{basic.categorytamil }}</h2>
                    <div class="card-body row" >
                      
                       
                      <div  class="col">
                       <img  :src="basic.image" :alt="basic.image" width="200px" height="300px" /> 
                      </div>
                      <div class="col m-auto">
                       <h1 class="display-3 font-weight-bold text-red" >{{basic.name}} <sup><button class="btn"  @click="playsound()"> <i class="fas fa-volume-up"></i> </button></sup></h1>
                       
                       
                       <br><br>
                       <h2 class="text-blue font-weight-bold" >{{basic.extrainfo}}</h2>
                       <br>
                       <h3  class="text-blue font-italic ">{{basic.translation}} </h3>
                       </div>
                      
                       <div class="m-auto">
                           <div class="font-italic text-secondary" v-if="basics!=null" >Total Items to learn in this chapter:  
                               <span class="font-weight-bold" >{{this.totalItems}} </span>
                            </div>
                            <br>
                            <button class="btn btn-success m-1"  @click="getItem(0)">First</button>
                            <button class="btn btn-warning m-1" @click="prevItem()">Prev</button>
                            <span v-if="current>1">....</span>

                            <button  class="btn btnnofocus " v-if="current!=0"  @click="getItem(current-1)" >{{this.current}}</button>
                            <button  id="btncurrent" class="btn btn-default active"   @click="getItem(current)" >{{this.current+1}}</button>
                            <button class="btn btnnofocus" v-if="current < totalItems-1"  @click="getItem(current+1)"> {{this.current+2}} </button>
                            

                            <span v-if="current!=totalItems-1">....</span>
                            <button class="btn btn-warning m-1" @click="nextItem()">Next</button>
                            <button class="btn btn-success m-1" v-if="basics!=null" @click="getItem(totalItems-1)">Last</button>
                      

                       </div>
                       <br>
                    </div>
                    </div>
                   
                </div>
            </div>
        </div>

</template>

<script>


    export default {
         name:"basics",
         props:['$route.params.category'],
         
        
    data(){
        return{
        category:this.$route.params.category,
        basics:null,
         
        basic:[],
        current:0,
        first:1,
       
        
      }
        
    },
    created(){
        
        this.getBasics(this.category);
        
     
    },
    
     computed: {

  totalItems(){
            if (this.basics!=null)
            return this.basics.length
            else return 0
        },
        prevCurrent(){
            if(this.current ==0)
            return this.current;
            else
            return this.current-1; 
        },
        
     
    },
    watch: {
    $route() {
        this.getBasics(this.$route.params.category)
    }
},
   
    methods:{
        	

        getBasics:async function(category){
             await axios.get('/api/basics/'+category)
         
            .then(res=>{
                console.log(res);
                this.basics=res.data.data;
            
                        if(this.basics!=null)
                         this.basic=res.data.data[0];
            })
                         .catch(err=>console.log(err))
        },
          nextItem(){
           
            if(this.current<this.totalItems-1)
                this.current+=1;   
            
                this.basic=this.basics[this.current];
               
              

        },
         prevItem(){
           
            if(this.current>0)
                this.current-=1;   
            
                this.basic=this.basics[this.current];
               
        },
        getItem:function(itemid){
           
            this.current=(itemid);
           this.basic=this.basics[this.current];
          
          
        },
        playsound(){
            var audio = new Audio(this.basic.audio);
            audio.play();
        }

           
    }
   
}
    
</script>
