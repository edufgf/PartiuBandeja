#include <stdio.h>
#include <stdlib.h>
#include <string.h>

char convert(char c){
    if (c=='�' || c=='�' || c=='�') return 'a';
    if (c=='�' || c=='�') return 'e';
    if (c=='�' || c=='�') return 'i';
    if (c=='�' || c=='�') return 'I';
    if (c=='�' || c=='�' || c=='�')  return 'o';
    if (c=='�' || c=='�') return 'u';
    if (c=='�') return 'c';
    return c;    
}

int main(){
    char dados[7][6][2][100];
    
    char buff[10000];
    int i,j,w,k=0;
    int mode=0;
    char out[100000];
    int cnt=0;
         for (i=0;i<2;i++)
           for (j=0;j<6;j++)
              for (k=0;k<7;k++){
                 gets(buff); 
                 int tam = strlen(buff);
                 for (w=0;w<tam;w++){
                    dados[k][j][i][w] = buff[w];
                 }    
                 dados[k][j][i][w]=0;
              }                               
    for (i=0;i<7;i++)
       for (j=0;j<2;j++)
          for (k=0;k<6;k++)
              puts(dados[i][k][j]);
    return 0;
}
