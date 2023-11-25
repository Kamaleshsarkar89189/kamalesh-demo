#include <stdio.h>
// done
int main()
{
    int n, count = 0, i;
    printf("Enter any number: ");
    scanf("%d", &n);
    for (i = 1; i <= n; i++)
    {
        if (n % i == 0)
        {
            count++;
        }
    }
    if (count == 2)
        printf("Prime number \n");
    else
        printf("Not prime number\n");
    return 0;
}