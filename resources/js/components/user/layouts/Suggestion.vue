
<template >
    <div>
        <div v-for="suggestion in suggestions" v-bind:suggestion="suggestion" :key='suggestion.id'>
            <router-link :to="{name:'basics',params:{category:suggestion.category_english}}" class="nav-link">
                <div class="card m-4 rounded "   >
                    <div class="card-body  "
                            :style=" [ suggestion.image ? {'background': 'url(' + suggestion.image + ')', backgroundSize:'contain',backgroundRepeat: 'no-repeat',height:'12rem'}:{'background-color': 'peachpuff' ,  backgroundSize:'contain',backgroundRepeat: 'no-repeat',height:'12rem' }]  "> 
                    
                            <div class=" text-red  text-right pt-5" >{{suggestion.category_name}} 

                            </div>
                            <div class="text-right"> {{ suggestion.category_english}}
                            </div>
                    
                        </div>
                                                 
                     </div>
                </router-link>
            </div>
        </div>
</template>

<script>
export default {
    name:'Suggestion',
    props:['suggestion'],
    data(){
        
        return{
        suggestions:null,
             
        }
        

    },
   
    created(){
        this.getSuggestions();
       

    },
    methods:{

        getSuggestions(){
            axios.get('/api/suggestion')
                 .then(res=>{
                     this.suggestions=res.data.data;
                     
                     });
                 }
            }
}
</script>



