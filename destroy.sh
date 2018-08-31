#!/bin/bash
echo "
##############################################################################################################
#  _                         
# |_) _  __ __ _  _     _| _ 
# |_)(_| |  | (_|(_ |_|(_|(_|
#
# Deployment of CUDALAB EU configuration in Microsoft Azure using Terraform and Ansible
#
##############################################################################################################
"

# Stop running when command returns error
set -e

#SECRET="/ssh/secrets.tfvars"
#STATE="terraform.tfstate"

while getopts "b:d:v:w:x:y:z:" option; do
    case "${option}" in
        b) BACKEND_ARM_ACCESS_KEY="$OPTARG" ;;
        d) DB_PASSWORD="$OPTARG" ;;
        v) AZURE_CLIENT_ID="$OPTARG" ;;
        w) AZURE_CLIENT_SECRET="$OPTARG" ;;
        x) AZURE_SUBSCRIPTION_ID="$OPTARG" ;;
        y) AZURE_TENANT_ID="$OPTARG" ;;
        z) DEPLOYMENTCOLOR="$OPTARG" ;;
    esac
done

cd terraform/
echo ""
echo "==> Starting Terraform deployment"
echo ""

echo ""
echo "==> Terraform init"
echo ""
echo "BACKEND_STORAGE_ACCOUNT_NAME: [$BACKEND_STORAGE_ACCOUNT_NAME]"
terraform init \
  -backend-config="storage_account_name=$BACKEND_STORAGE_ACCOUNT_NAME" \
  -backend-config="container_name=$BACKEND_CONTAINER_NAME" \
  -backend-config="key=$BACKEND_KEY_COLOR" \
  -backend-config="access_key=$BACKEND_ARM_ACCESS_KEY" \

echo ""
echo "==> Terraform workspace [$DEPLOYMENTCOLOR]"
echo ""
terraform workspace list
terraform workspace select $DEPLOYMENTCOLOR || terraform workspace new $DEPLOYMENTCOLOR

echo ""
echo "==> Terraform destroy"
echo ""
terraform destroy -var "CCSECRET=$CCSECRET" \
                  -var "PASSWORD=$PASSWORD" \
                  -var "SSH_KEY_DATA=$SSH_KEY_DATA" \
                  -var "CCSECRET=$CCSECRET" \
                  -var "PASSWORD=$PASSWORD" \
                  -var "SSH_KEY_DATA=$SSH_KEY_DATA" \
                  -var "DB_PASSWORD=$DB_PASSWORD" \
                  -var "AZURE_CLIENT_ID=$AZURE_CLIENT_ID" \
                  -var "AZURE_CLIENT_SECRET=$AZURE_CLIENT_SECRET" \
                  -var "AZURE_SUBSCRIPTION_ID=$AZURE_SUBSCRIPTION_ID" \
                  -var "AZURE_TENANT_ID=$AZURE_TENANT_ID" \
                  -var "DEPLOYMENTCOLOR=$DEPLOYMENTCOLOR" \
                  -auto-approve 
