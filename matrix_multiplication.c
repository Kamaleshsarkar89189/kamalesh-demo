#include<stdio.h>
#include<stdlib.h>

int main(){
    int sum=0;
    int a[3][4],b[4][2],result[3][2];
    printf("Enter the first matrix 3 X 4\n");
    for(int i=0;i<3;i++)
    {
        for(int j=0;j<4;j++)
        {
            
    
    //    printf("Enter the %d %d element of first matrix\n",i,j);
       scanf("%d",&a[i][j]);
        // printf("\t");
        }
        // printf("\n");
    }
    printf("Enter the second matrix 4 X 2\n");

    for(int i=0;i<4;i++)
    {
        for(int j=0;j<2;j++)
        {
    
    //    printf("Enter the %d %d element of first matrix\n",i,j);
       scanf("%d",&b[i][j]);
    //    printf("\t");
        }
        // printf("\n");
    }


     for(int i=0;i<3;i++)
    {
        for(int j=0;j<2;j++)
        {
        
        for(int k=0;k<4;k++)
        {
            sum += a[i][k] * b[k][j];
        }
        result[i][j] = sum;
        sum = 0;
       
        }
    }
            printf("Multiplication of two matrix is:\n");
    for(int i=0;i<3;i++)
    {
        for(int j=0;j<2;j++)
        {
            printf("%d\t",result[i][j]);
        }
        printf("\n");
    }

    return 0;
}