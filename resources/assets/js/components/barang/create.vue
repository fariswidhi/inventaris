<template>
  <div>
    
  <h1>Tambah Barang</h1>
  <form v-on:submit.prevent="save()" class="form-horizontal" >

                      <div class="form-group">
                        <label for="name" class="col-md-12 control-label" >Kode Barang</label>
                        <div class="col-md-12">
                          <input type="text" class="form-control" required="" placeholder="Kode Barang" v-model="barang.kode_barang"/>

                        </div>
                      </div>
                      <div class="form-group">
                        <label for="name" class="col-md-12 control-label" >Nama Barang</label>
                        <div class="col-md-12">
                          <input type="text" class="form-control" required="" placeholder="Nama Barang" v-model="barang.nama"/>

                        </div>
                      </div>
                      <div class="form-group">
                        <label for="name" class="col-md-12 control-label" >Spesifikasi</label>
                        <div class="col-md-12">
                          <input type="text" class="form-control" required="" placeholder="Spesifikasi Barang" v-model="barang.spesifikasi"/>

                        </div>
                      </div>
                      <div class="form-group">
                        <label for="name" class="col-md-12 control-label" >Lokasi</label>
                        <div class="col-md-12">
                          <input type="text" class="form-control" required="" placeholder="Lokasi" v-model="barang.lokasi"/>

                        </div>
                      </div>
                      <div class="form-group">
                        <label for="name" class="col-md-12 control-label" >Kategori Barang</label>
                        <div class="col-md-12">
                          <input type="text" class="form-control" required="" placeholder="Kategori Barang" v-model="barang.kategori"/>

                        </div>
                      </div>
                      <div class="form-group">
                        <label for="name" class="col-md-12 control-label" >Jumlah Barang</label>
                        <div class="col-md-12">
                          <input type="text" class="form-control" required="" placeholder="Jumlah Barang" v-model="barang.jumlah"/>

                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-4 col-md-offset-2">
                          <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                      </div>
                    </form>

  </div>
</template>

<script>
  export default{
    data(){
      return {
        barang:{}
      }
    },
    methods:{
      save(){
        let uri = 'http://localhost:8000/barang';
        var barang = this.barang;
        this.axios.post(uri,barang).then((response)=>{
          this.$router.push({'name':'Barang'});

        })
      }
    }
  }  
</script>