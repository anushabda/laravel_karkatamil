<template>
     <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bgcolorba shadow-lg" >
                   
                <h2 class="textcolorbv font-italic font-weight-bold mx-auto pt-2 " > {{letter.categorytamil }}</h2>
                    <div class="card-body row" >
                        <div class="dispaly-3" v-if="letters==null">
                                Contents on the way
                            </div>
                       
                      <div class="col">
                       <img  :src="letter.image" :alt="letter.image" width="200px" height="300px" /> 
                      </div>
                      <div class="col m-auto">
                       <h1 class="display-3 font-weight-bold text-red" >{{letter.name}} <sup><button class="btn"  @click="playsound()"> <i class="fas fa-volume-up"></i> </button></sup></h1>
                       
                       
                       <br><br>
                       <h2 class="text-blue font-weight-bold" >{{letter.extrainfo}}</h2>
                       <br>
                       <h3  class="text-blue font-italic ">{{letter.translation}} </h3>
                       </div>
                      
                       <div class="m-auto">
                           <div class="font-italic text-secondary" v-if="letters!=null" >Total Items to learn in this chapter:  
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
                            <button class="btn btn-success m-1" v-if="letters!=null" @click="getItem(totalItems-1)">Last</button>
                      

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
    name:"Letters",
    
   
    data(){
        return{
        letters:null,
        letter:[],
        current:0,
        first:1,
        }
    },
    computed:{
        totalItems(){
            if (this.letters!=null)
            return this.letters.length
            else return 0
        },
        prevCurrent(){
            if(this.current ==0)
            return this.current;
            else
            return this.current-1; 
        }
        
       
    },
    created(){
        this.getLetters()
     
    },
    methods:{
        getLetters(){
            axios.get('/api/basics/letters')
            .then(res=>{
                this.letters=res.data.data;
                this.letter=res.data.data[0];
                
                })
            .catch()
        },
        nextItem(){
           
            if(this.current<this.totalItems-1)
                this.current+=1;   
            
                this.letter=this.letters[this.current];
               
              

        },
         prevItem(){
           
            if(this.current>0)
                this.current-=1;   
            
                this.letter=this.letters[this.current];
               
        },
        getItem:function(itemid){
           
            this.current=(itemid);
           this.letter=this.letters[this.current];
          
          
        },
        playsound(){
            //var audio = new Audio('/storage/data/letters/uyir/sounds/a.mp3');
            var audio = new Audio(this.letter.audio);
            audio.play();
        }

           
    }
   
}
</script>
<style scoped>
#btncurrent{
    background-color: peru;
    border-color: sienna;
    box-shadow:1px 2px brown;
   
}

.btnnofocus{
    outline:0;
    box-shadow:none;
}
.bgcolorblueviolet{
    background-color: blueviolet;
    color:blanchedalmond;

}

</style>