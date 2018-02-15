<template>
	<div>
		
	<h1>Transaksi Barang Masuk</h1>
<div class="pull-left">
	  <b-btn :to="{name:'CreateTransaksiMasuk'}">Tambah</b-btn>
	
</div>
<!--   <b-modal id="myModal" title="Konfirmasi"  ref="confirmModal"     @ok="forceRemove(barang.kode_barang)" >
	Yakin Menghapus Data ini?
  </b-modal> -->
  <table class="table table-bordered" >
                    <thead>
                        <th>Kode Transaksi</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                      <tr v-for="d in data">
                      <td>{{d.kode}}</td>
                      <td>{{d.created_at}}</td>
                      <td>
                              <b-btn :to="{name:'DetailTransaksiMasuk',params:{id:d.kode}}"> Detail</b-btn>
                      </td>

                      </tr>
                    </tbody>
                    </table>


	</div>
</template>

<script>
  export default{
    data(){
      return{
        data:''
      }
    },
    created(){
      this.fetch();
    },
    methods:{
      fetch(){
        let uri = 'http://localhost:8000/transaksi/barang-masuk/all';
        axios.get(uri).then((response)=>{
          this.data = response.data;
        });
      }
    }
  }
</script>