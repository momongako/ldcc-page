<template>
<div class="addmin_add_relation_posts">
    <input type="text" placeholder="Enter post title" v-model="query" @keyup="getData()" autocomplete="off" class="form-control border-input" />
    <div class="panel-footer" v-if="search_data.length">
        <ul class="list-group">
            <a href="javascript:void(0)" class="list-group-item" v-for="item in search_data" @click="showItem(item)">{{ item.title }}</a>
        </ul>
    </div>
    <div class="panel-footer panel-footer-select" v-if="items.length > 0">
        <ul class="list-group">
            <li v-for="item in items" >
                <a href="javascript:void(0)" @click="deleteItem(item)"><i class="ti-trash" title="Delete"></i></a> {{item.title}}
            </li>
        </ul>
    </div>
</div>
</template>
<script>
    export default {
        props: ['items','testValue'],
        data:function(){
            return{
                query:'',
                search_data:[]
            }
        },
        methods:{
            getData: function(){
                this.search_data = [];
                axios.get('/admin/getListPost?query='+this.query).then(response => {
                    this.search_data = response.data;
                });
                this.$emit('ChangePostItem', this.items);
            },
            showItem: function(item){
                this.query = '';
                this.search_data = [];
                let check = true;
                let i;
                for (i = 0; i < this.items.length; i++) {
                    if (item.id == this.items[i].id) check = false;
                }
                if (check) {
                    this.items.push(item);
                }
                this.$emit('ChangePostItem', this.items);
            },
            deleteItem: function (item) {
                var items = this.items;
                items = items.filter(function(el) { return el.title != item.title; });
                this.$emit('ChangePostItem', items);
            }
        }
    }
</script>
