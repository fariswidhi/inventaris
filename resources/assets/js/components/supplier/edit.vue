<template>
  <div>
    
  <h1>Edit Supplier Barang</h1>
  <form v-on:submit.prevent="save(supplier.id)" class="form-horizontal" >

                      <div class="form-group">
                        <label for="name" class="col-md-12 control-label" >Nama Supplier</label>
                        <div class="col-md-12">
                          <input type="text" class="form-control" required="" placeholder="Kode Barang" v-model="supplier.nama"/>

                        </div>
                      </div>
                      <div class="form-group">
                        <label for="name" class="col-md-12 control-label" >Alamat</label>
                        <div class="col-md-12">
  <textarea class="form-control" v-model="supplier.alamat"></textarea>
    

                        </div>
                      </div>

                    </form>

  </div>
</template>

<script>
  export default{
    data(){
      return {
        supplier:{}
      }
    },
    created(){

        let uri = 'http://localhost:8000/supplier/'+this.$route.params.id+'/edit';
        this.axios.get(uri).then((response)=>{
          this.supplier = response.data;
        });
    },
    methods:{
      save(id){
        let uri = 'http://localhost:8000/supplier/'+id;
        var supplier = this.supplier;
        this.axios.patch(uri,supplier).then((response)=>{
          this.$router.push({'name':'Supplier'});

        })
      }
    }
  }  
</script>