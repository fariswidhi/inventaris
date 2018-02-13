<template>
  <div>
    
  <h1>Tambah Transaksi Masuk Barang</h1>
  
    <form v-on:submit.prevent="save()" class="form-horizontal" >

                      <div class="form-group">
                        <label for="name" class="col-md-12 control-label" >Kode Transaksi</label>
                        <div class="col-md-12">
                          <input type="text" class="form-control"  placeholder="Nama" v-model="user.name"/>

                        </div>
                      </div>

  <div class="form-group">
  <div class="col-md-12">
      <b-btn @click="showModal">Tambah Barang</b-btn>

      <br>
      <br>
    <div class="col-md-5">
      
                      <table class="table table-hover">
                      <thead>
                        <th>Kode Barang</th>
                        <th>Jumlah</th>
                        <th>Aksi</th>
                      </thead>
                          <tbody>
                            <tr v-for="item in b">
                              <td>{{item.kode_barang}}</td>
                              <td><input type="text" class="form-control" name=""></td>
                              <td><button @click="deleteBarang(item.id)" class="btn btn-danger">Hapus</button></td>
                            </tr>
                          </tbody>
                      </table>
    </div>

  </div>

  </div>

                    
                      <div class="form-group">
                        <div class="col-md-4 col-md-offset-2">
                                         



                          <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                      </div>
                    </form>

  <b-modal id="modal1" title="Tambah Barang" ref="myModalRef"  size="lg" hide-footer="true">


                    <table class="table table-bordered" >
                    <thead>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Aksi</th>

                    </thead>
                    <tbody >
                      <tr v-for="item in items">

                        <td>{{ item.kode_barang}}</td>
                        <td>{{ item.nama}}</td>
                        <td>
                          <center>
                        <button @click='saveBarang(item.kode_barang)' class="btn btn-success">Tambahkan</button>

</center>

                        </td>

                              
                      </tr>
                    </tbody>
                    </table>

  </b-modal>

  </div>
</template>

<script>
  export default{
    data(){
      return {
        barang:{},
        user: {},
        items:{},
        form: {},
        b:{}
      }
    },
    created(){
      this.fetchBarangSementara();
    },
    methods:{

    fetchBarangSementara(){
      let uri = "http://localhost:8000/barang-sementara";
      this.axios.get(uri).then((response)=>{
          this.b = response.data;
      })

    },
    showModal () {
      this.$refs.myModalRef.show()
            let uri = "http://localhost:8000/barang";
      this.axios.get(uri).then((response)=>{
        this.items = response.data;

      });
    },
    saveBarang(id){
    let uri = "http://localhost:8000/save-barang/";
    var barang = id;
    this.axios.post(uri,{id:barang}).then((response)=>{
      this.fetchBarangSementara();
            this.$refs.myModalRef.hide()
    });

    },

      save(){
        let uri = 'http://localhost:8000/barang';
        var barang = this.barang;
        this.axios.post(uri,barang).then((response)=>{
          this.$router.push({'name':'Barang'});

        })
      },
      deleteBarang(id){
        let uri = 'http://localhost:8000/delete-barang/';

        this.axios.post(uri,{id:id}).then((response)=>{
                this.fetchBarangSementara();
 
        });

      }
    }
  }  
</script>