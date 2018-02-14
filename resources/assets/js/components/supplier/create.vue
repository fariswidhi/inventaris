<template>
  <div>
    
  <h1>Tambah Supplier</h1>
  <form v-on:submit.prevent="save()" class="form-horizontal" >

                      <div class="form-group">
                        <label for="name" class="col-md-12 control-label" >Nama Supplier</label>
                        <div class="col-md-12">
                          <input type="text" class="form-control" required="" placeholder="Nama Supplier" v-model="supplier.nama"/>

                        </div>
                      </div>
                      <div class="form-group">
                        <label for="name" class="col-md-12 control-label" >Alamat</label>
                        <div class="col-md-12">
  <textarea class="form-control" v-model="supplier.alamat"></textarea>
    

                        </div>
                      </div>
  <button class="btn btn-primary" type="submit">Simpan</button>
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
    methods:{
      save(){
        let uri = 'http://localhost:8000/supplier';
        var supplier = this.supplier;
        this.axios.post(uri,supplier).then((response)=>{
          this.$router.push({'name':'Supplier'});

        })
      }
    }
  }  
</script>