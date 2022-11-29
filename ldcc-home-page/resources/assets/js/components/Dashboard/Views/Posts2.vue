<template>
    <div class="row">
        <div class="col-md-6">
            <ul>
                <li v-for='(item,index) in multipleCategory' :key="index">{{item.name}}
                    <ul>
                        <children-category :items="item.children_categories"></children-category>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</template>
<script>
    export default {
        data(){
            return{
                title:"Add Category",
                multipleCategory:{},
            }
        },
        mounted(){
            this.getAllCategories();
        },
        methods:{
            getAllCategories(){
                axios.get("/admin/all/categories").then(item=>{
                    this.multipleCategory = item.data['multiple'];
                });
            }
        }
    }
</script>
