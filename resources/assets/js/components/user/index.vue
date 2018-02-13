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