<template>
	<div>
		
	<h1>Barang</h1>
<div class="pull-left">
	  <b-btn :to="{name:'CreateBarang'}">Tambah</b-btn>
	
</div>
  <b-modal id="myModal" title="Konfirmasi"  ref="confirmModal"     @ok="forceRemove(barang.kode_barang)" >
	Yakin Menghapus Data ini?
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

                       	  <b-btn :to="{name:'EditBarang',params:{id:item.kode_barang}}"> Edit</b-btn>
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

  		 this.$refs.myModalRef.show();
  		 this.clear();
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
  		// this.axios.post(uri,barang).then((response)=>{
  		// 	this.$router.push({name:'barang'});
  		// 	   this.$refs.myModalRef.hide();
  		// 	   this.fetch();
  		// 	   this.clear();

  		// })
  		// .catch((r)=>{
  		// 	console.log(r);
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