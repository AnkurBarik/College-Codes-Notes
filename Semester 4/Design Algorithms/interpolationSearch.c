//Write a c program to find an element from a sorted array having 'n' elements using an algorithm whoose complexities is O(log(log (n)))

#include <stdio.h>

int interpolationSearch(int arr[], int n, int target) {
    int low = 0;
    int high = n - 1;

    while (low <= high && target >= arr[low] && target <= arr[high]) {
        if (low == high) {
            if (arr[low] == target) return low;
            return -1;
        }

        // Interpolation formula
        int pos = low + (((double)(high - low) / (arr[high] - arr[low])) 
                        * (target - arr[low]));

        if (arr[pos] == target)
            return pos;

        if (arr[pos] < target)
            low = pos + 1;
        else
            high = pos - 1;
    }
    return -1;
}

int main() {
    int n;
    printf("Enter the size of array: ");
    scanf("%d", &n);

    int arr[n];
    printf("Enter %d sorted elements:\n", n);
    for(int i = 0; i < n; i++) {
        scanf("%d", &arr[i]);
    }

    int target;
    printf("Enter the element to search: ");
    scanf("%d", &target);

    int result = interpolationSearch(arr, n, target);
    if (result != -1)
        printf("Element %d found at index %d\n", target, result);
    else
        printf("Element %d not found in the array\n", target);

    return 0;
}
