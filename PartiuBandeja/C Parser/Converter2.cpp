#include <stdio.h>
#include <stdlib.h>
#include <string.h>

char convert(char c){
    if (c=='ã' || c=='á' || c=='à') return 'a';
    if (c=='é' || c=='è' || c=='ê') return 'e';
    if (c=='í') return 'i';
    if (c=='ó' || c=='ò' || c=='õ' || c=='ô')  return 'o';
    if (c=='ú' || c=='ù') return 'u';
    if (c=='ç') return 'c';
    return c;    
}

int main(){
    char dados[7][6][2];
    
    char buff[10000];
    int i,k=0;
    int mode=0;
    char out[100000];
    int cnt=0;
    while(gets(buff)!=NULL){
         int tam = strlen(buff);
         mode=0;
         for (i=0;i<tam;i++){
             if (buff[i]==' ' && mode==0){
                 mode=1;  
                 cnt++;            
                 continue;
             }    
             if (buff[i]!=' ' && mode==1){
                 mode=0;
                 if (k!=0)
                 out[k++]=' ';
                   
                 out[k++]=convert(buff[i]);   
                 cnt=0;   
                 continue;                 
             }
             if (mode==0){
                 out[k++]=convert(buff[i]);                          
             }else cnt++;
         }
         out[k]=0;
         k=0;
         puts(out);                   
    }

    return 0;
}
