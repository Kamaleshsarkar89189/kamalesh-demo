#include <stdio.h>
int power(int base, int exponent){
int result=1;
for(int i=0;i<exponent;i++)
result*=base;
return result;
}
int main(){
    int base;
    int exponent;
    printf("enter a base number ");
    scanf("%d", &base);
    printf("enter an exponent ");
    scanf("%d", &exponent);
    printf("%d^%d=%d\n",base,exponent,power(base,exponent));
    return 0;
}