<template>
    <div>
        <li v-for="(item,index) in dataChild" :key="index">
            <span>{{item.name}}</span> <a style="margin-left: 20px;" v-if="linkeditX" :href="linkeditX + item.id" >Edit</a>
            <ul>
                <children-category :items="item.children_categories" :linkedit="linkeditX"></children-category>
            </ul>
        </li>
    </div>
</template>
<script>
    export default {
        props:['items','linkedit'],
        data(){
            return{
                dataChild:{},
                linkeditX: ''
            }
        },
        mounted(){
            this.dataChild=this.items;
            if(this.linkedit){
                this.linkeditX=this.linkedit
            }
        }
    }
</script>
