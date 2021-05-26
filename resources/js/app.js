require('./bootstrap');

import Vue from 'vue/dist/vue';

var app= new Vue(
    {
      el:"#app",
      data: {
        imageIndex:0,
        images:[
          // "../img/wagyu.png",
          "../img/tagliata.svg",
          "../img/tagliere_salumi.webp"
          // "../img/knife.jpeg",
          // "../img/fork.jpeg"
        ],
        autoplay:""
      },
  
      created:function(){
        this.autoplay = setInterval(
          () => this.nextImage(),5000
        )
      },

      methods:{
        nextImage: function(){
          this.imageIndex ++;
          if (this.imageIndex==this.images.length){
            this.imageIndex=0
          }
        },
        prevImage: function(){
            this.imageIndex --;
            if (this.imageIndex== -1){
              this.imageIndex= this.images.length -1;
            }
          },
    }
});