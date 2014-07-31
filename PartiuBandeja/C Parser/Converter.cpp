#include <stdio.h>
#include <stdlib.h>
#include <string.h>


int main(){
    char dados[7][6][2];
    
    char buff[10000];
    int i,k=0;
    int mode=0;
    char out[100000];
    while(gets(buff)!=NULL){
         int tam = strlen(buff);
         for (i=0;i<tam;i++){
             if (buff[i]=='<' && mode==0){
                 mode=1;              
                 continue;
             }    
             if (buff[i]=='>' && mode==1){
                 mode=0;
                 continue;                 
             }
             if (mode==0){
                 out[k++]=buff[i];                          
             }
         }
         out[k]=0;
         k=0;
         puts(out);                   
    }

    return 0;
}
