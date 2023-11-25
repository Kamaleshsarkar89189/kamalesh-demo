#include <stdio.h>
//  Write a c program find if a given number is negative or positive or zero
// done
int main()
{
    int num;
    printf("Enter a number:");
    scanf("%d", &num);
    if (num < 0)
    {
        printf("The number is Negative.\n");
    }
    else if (num > 0)
    {
        printf("The number is Posetive.\n");
    }
    else
    {
        printf("The number is zero.\n");
    }
    return 0;
}
