<template>
	<div>
		
	<h1>Barang</h1>
<div class="pull-left">
	  <b-btn @click="click('new',0)">Tambah</b-btn>
	
</div>
  <b-modal id="myModal" title="Konfirmasi"  ref="confirmModal"     @ok="forceRemove(barang.kode_barang)" >
	Yakin Menghapus Data ini?
  </b-modal>

  <b-modal id="myModal" title="Tambah Barang" hide-footer="true"	 ref="myModalRef" >
                    <form v-on:submit.prevent="saveForm()" class="form-horizontal" >

                      <div class="form-group">
                      
                      </div>
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

  </b-modal>




  <b-modal id="myModal" title="Edit Barang" hide-footer="true"	 ref="myEditModal">
                    <form v-on:submit.prevent="updateForm(barang.kode_barang)" class="form-horizontal" >

                      <div class="form-group">
                      
                      </div>
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

  </b-modal>


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

                       	  <b-btn @click="click('edit',item.kode_barang)">Edit</b-btn>
	  	<b-btn @click="remove(item.kode_barang)">Hapus</b-btn>

                        </td>
                      </tr>
                    </tbody>
                    </table>


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
  	click(state,id){
  		if (state=='edit') {
  		this.getData(id);
  		}
  		else{
  			this.newForm();
  		}
  	},
  	newForm(){
  		this.clear();
  		 this.$refs.myModalRef.show();
  	},
  	clear(){
  		this.barang = '';
  	},
  	getData(id){
      let uri = "http://localhost:8000/barang/"+id+"/edit";
      this.axios.get(uri).then((response)=>{
      	this.barang =response.data;
      	// console.log("as");
      	      this.$refs.myEditModal.show();


      })
  	},
    fetch(){
      let uri = "http://localhost:8000/barang";
      this.axios.get(uri).then((response)=>{
        this.items = response.data;

      })
    },

  saveForm(){
      let uri = "http://localhost:8000/barang";
  		var barang = this.barang;
  		this.axios.post(uri,barang).then((response)=>{
  			this.$router.push({name:'barang'});
  			   this.$refs.myEditModal.hide();
  			   this.fetch();
  			   this.clear();

  		});

  },
  updateForm(id){
      let uri = "http://localhost:8000/barang/"+id;
  		var barang = this.barang;
  		this.axios.patch(uri,barang).then((response)=>{
  			this.$router.push({name:'barang'});
  			   this.$refs.myEditModal.hide();
  			   this.fetch();
  			   this.clear();

  		});

  },
  remove(id){
  	      let uri = "http://localhost:8000/barang/"+id+"/edit";
      this.axios.get(uri).then((response)=>{
      	this.barang =response.data;
      	// console.log("as");

      	      this.$refs.confirmModal.show();


      })

  },
  forceRemove(id){
  	      let uri = "http://localhost:8000/barang/"+id;
  	      this.axios.delete(uri);
  	      this.fetch();

  },

  }

}
</script>  


<!-- table-basic-1.vue -->