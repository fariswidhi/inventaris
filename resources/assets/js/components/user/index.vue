<template>
  <div>
    
  <h1>User</h1>

<div class="pull-left">
    <b-btn :to="{name:'CreateUser'}">Tambah</b-btn>
  
</div>
  


                    <table class="table table-bordered" >
                    <thead>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Level</th>
                        <th>Opsi</th>


                    </thead>
                    <tbody >
                      <tr v-for="item in items">
                        <td>{{ item.name}}</td>
                        <td>{{ item.email}}</td>
                        <td>{{ item.level}}</td>
                        <td>

                          <b-btn :to="{name:'EditUser',params:{id:item.id}}"> Edit</b-btn>
                    <b-btn @click="remove(item.id)">Hapus</b-btn>

                        </td>
                      </tr>
                    </tbody>
                    </table>



  <b-modal id="myModal" title="Konfirmasi"  ref="confirmModal"     @ok="forceRemove(item.id)" >
  Yakin Menghapus Data ini?
  </b-modal>


  </div>
</template>



<script>

export default {
  data () {
    return {
      items: [],
      barang :{},
      fields: {
        kode_barang:{
          'label':'Kode'
        },
        actions:{
          variant:'danger'
        }
      }

    }
  },
  created: function(){
    this.fetch();
  },
  methods: {
    clear(){
      this.barang = '';
    },
    fetch(){
      let uri = "http://localhost:8000/users";
      this.axios.get(uri).then((response)=>{
        this.items = response.data;

      })
    },

  saveForm(){
      let uri = "http://localhost:8000/barang";
      var barang = this.barang;
      // this.axios.post(uri,barang).then((response)=>{
      //  this.$router.push({name:'barang'});
      //     this.$refs.myModalRef.hide();
      //     this.fetch();
      //     this.clear();

      // })
      // .catch((r)=>{
      //  console.log(r);
      // })
      // ;
      console.log(barang);

  },
  updateForm(id){
      let uri = "http://localhost:8000/barang/"+id;
      var barang = this.barang;
      this.axios.patch(uri,barang).then((response)=>{
        this.$router.push({name:'Barang'});
           this.$refs.myEditModal.hide();
           this.fetch();
           this.clear();

      });

  },
  remove(id){
    // console.log(id);
          let uri = "http://localhost:8000/users/"+id+"/edit";
      this.axios.get(uri).then((response)=>{
        this.item  = response.data;
        // console.log(this.item);

              this.$refs.confirmModal.show();


      })

              // this.$refs.confirmModal.show();

  },
  forceRemove(id){
          let uri = "http://localhost:8000/users/"+id;
          this.axios.delete(uri);
          this.fetch();

  },

  }

}
</script>  


<!-- table-basic-1.vue -->