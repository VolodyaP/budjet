<template>
   <div class="content" v-cloak>
        <div class="row">
            <template>
                <div class="col-md-12">
                    <h5>Summ: @{{ max }}</h5>
                    <b-progress :value="value" :max="max" show-value class="mb-3"></b-progress>
                </div>
            </template>
        </div>

        <div class="row">
            <div class="col-md-5">
                <b-input-group size="lg" prepend="$" append=".00">
                    <b-form-input v-model="money"></b-form-input>
                </b-input-group>
            </div>

            <div class="col-md-6" style="padding: 7px;">
                <b-button variant="success" @click="add"> + </b-button>
                <b-button variant="danger"  @click="subtract"> - </b-button>
            </div>
        </div>
    </div>
</template>
<script>
 
   export default {
 
       props: [
       'max',
       'value'
       ],
       mounted() {
            alert('Task Component is Loaded');
       },

      data: function () {
        return {
          money: 0
        }
      },

       methods: {
          add: function () {
             this.value += parseInt(this.money);
             this.money = 0;
          },

         subtract: function () {
             this.value -= parseInt(this.money);
             this.money = 0;
         }

     }
 
   }
 
</script>