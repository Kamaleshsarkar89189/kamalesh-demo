#include <stdio.h> //not done
int main()
{
    char operation;
    double num1, num2, result;
    printf("Enter an operation (+, -, *, /): ");
    scanf(" %c", &operation);
    switch (operation)
    {
    case '+':
        printf("Enter two numbers: ");
        scanf("%lf %lf", &num1, &num2); // for “double” data type %If is used as Format Specifier
        result = num1 + num2;
        printf("Result: %.2lf\n", result);
        // printf("Enter an operation (+, -, *, /): ");
        break;
    case '-':
        printf("Enter two numbers: ");
        scanf("%lf %lf", &num1, &num2);
        result = num1 - num2;
        printf("Result: %.2lf\n", result);
        break;
    case '*':
        printf("Enter two numbers: ");
        scanf("%lf %lf", &num1, &num2);
        result = num1 * num2;
        printf("Result: %.2lf\n", result);
        break;
    case '/':
        printf("Enter two numbers: ");
        scanf("%lf %lf", &num1, &num2);
        if (num2 != 0)
        {
            result = num1 / num2;
            printf("Result: %.2lf\n", result);
        }
        else
        {
            printf("Error: Division by zero!\n");
        }
        break;

    default:
        printf("Invalid operation!\n");
    }

    return 0;
}
 