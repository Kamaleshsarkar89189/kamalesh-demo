#include <stdio.h>
int sumOfNaturalNumbers(int n) 
{
    if (n == 0) 
    {
        return 0; 
    } else 
    {
        return n + sumOfNaturalNumbers(n - 1); 
    }
}
int main() 
{
    int num, Result;
    printf("Enter a positive integer: ");
    scanf("%d", &num);
    if (num < 0) 
    {
        printf("Please enter a positive integer.\n");
    } else 
    {
        Result = sumOfNaturalNumbers(num);
        printf("Sum of the first %d natural numbers is %d\n", num, Result);
    }
return 0;
}
