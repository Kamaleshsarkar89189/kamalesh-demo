#include <stdio.h>//done

int main()
{
    int lower_limit, upper_limit;
    printf("Enter the lower limit:\n");
    scanf("%d", &lower_limit);
    printf("Enter the upper limit:\n");
    scanf("%d", &upper_limit);
    printf("Odd number between %d and %d:\n");//n, lower_limit, upper_limit//n);
    for (int i = lower_limit; i <= upper_limit; i++)
    {
        if (i % 2 != 0)
        {
            printf("%d\n", i);
        }
    }
    printf("Even number between %d and %d:\n", lower_limit, upper_limit);
    for (int i = lower_limit; i <= upper_limit;
         i++)
    {
        if (i % 2 == 0)
        {
            printf("%d\n", i);
        }
    }

    return 0;
}